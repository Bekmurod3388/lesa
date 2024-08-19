<?php

namespace App\Services;

use App\Models\Rent;
use App\Models\RentHistory;
use App\Models\Service;
use Illuminate\Support\Facades\DB;

class RentService
{
    public function create($data, $client){
        $summ = 0;
        try {
            DB::beginTransaction();

            foreach ($data['services'] as $index => $serviceId) {
                $service = Service::query()->lockForUpdate()->find($serviceId);
                $quantity = $data['counts'][$index];

                if (!$service) {
                    throw new \Exception('Service not found with ID: ' . $serviceId);
                }


                if ($service->count >= $quantity) {

                    Rent::query()->create([
                        'client_id' => $client->id,
                        'service_id' => $serviceId,
                        'quantity' => $quantity,
                        'status'=>Rent::STATUS_ACTIVE,
                    ]);

                    RentHistory::query()->create([
                        'client_id' => $client->id,
                        'service_id' => $serviceId,
                        'difference' => $quantity,
                        'before' => 0,
                        'after' => $quantity
                    ]);
                    $summ+=$service->cost*$quantity;

                    $service->count -= $quantity;
                    $service->save();

                } else {
                    throw new \Exception('Insufficient stock for service ID: ' . $serviceId);
                }
            }

            $client->debts = $summ;
            $client->save();
            DB::commit();
            $response = ['key' => 'success', 'message' => 'Muvaffaqiyatli yaratildi'];

        } catch (\Exception $exception) {
            DB::rollBack();
            $response = ['key' => 'error', 'message' => 'Xatolik mavjud: ' . $exception->getMessage()];
        }

        return $response;
    }
}
