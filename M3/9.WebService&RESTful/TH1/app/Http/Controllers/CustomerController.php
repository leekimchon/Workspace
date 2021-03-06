<?php

namespace App\Http\Controllers;

use App\Services\CustomerServiceImpl;
use Illuminate\Http\Request;

class CustomerController extends Controller {
    protected $customerService;

    public function __construct(CustomerServiceImpl $customerService) {
        dd(1);
        $this->customerService = $customerService;
    }

    public function index() {
        dd(1);
        $customers = $this->customerService->getAll();

        return response()->json($customers, 200);
    }

    public function show($id) {
        $dataCustomer = $this->customerService->findById($id);

        return response()->json($dataCustomer['customers'], $dataCustomer['statusCode']);
    }

    public function store(Request $request) {
        $dataCustomer = $this->customerService->create($request->all());

        return response()->json($dataCustomer['customers'], $dataCustomer['statusCode']);
    }

    public function update(Request $request, $id) {
        $dataCustomer = $this->customerService->update($request->all(), $id);

        return response()->json($dataCustomer['customers'], $dataCustomer['statusCode']);
    }

    public function destroy($id) {
        $dataCustomer = $this->customerService->destroy($id);

        return response()->json($dataCustomer['message'], $dataCustomer['statusCode']);
    }
}
