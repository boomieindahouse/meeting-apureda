@extends('layouts.app')

@section('title', $product['name'] . ' - รายละเอียดสินค้า')
@php
$breadcrumbs = [
['label' => 'หน้าแรก', 'url' => route('home')],
['label' => 'เครื่องอัดลม / ปั๊มลม (Air Compressor)', 'url' => route('airpump')],
['label' => $product['name']]
];
@endphp

@include('client.airpump.banner')
@include('client.components.breadcrumb', ['items' => $breadcrumbs])

@section('content')
<div class="container mx-auto py-10">
<div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
    <!-- ภาพสินค้า -->
    <div class="bg-white flex justify-center">
        <img src="{{ asset('images/products/aircompressor/' . $product['image']) }}"
            alt="{{ $product['name'] }}"
            class="w-[80%] md:w-[60%] lg:w-[80%] h-auto object-cover rounded-lg">
    </div>

    <!-- รายละเอียดสินค้า -->
    <div class="flex flex-col justify-center">
        <h1 class="text-3xl font-semibold text-gray-900">{{ $product['name'] }}</h1>
        <p class="text-gray-600 mt-4">{{ $product['description'] }}</p>

        <div class="mt-6">
            <a href="#" class="bg-primary rounded-3xl px-6 py-2 text-white border hover:bg-white hover:border hover:border-teal-600 hover:text-primary duration-300">
                Specification
            </a>
        </div>
    </div>
</div>

</div>

<!-- Section รายละเอียดสินค้า & ตารางข้อมูลทางเทคนิค -->
<div class="container mx-auto py-2">
    <div class="bg-gray-100 rounded-lg p-6">
        <!-- หัวข้อ -->
        <h2 class="text-xl font-semibold text-teal-700 border-b-2 border-teal-500 pb-2">
            รายละเอียดสินค้า
        </h2>

        <!-- รายละเอียดสินค้า -->
        <div class="mt-6 space-y-4">
            <p class="text-gray-900 font-semibold">APUREDA Refrigerated Air Dryer</p>

            <ul class="space-y-3 text-gray-700">
                <li class="flex items-start">
                    <img src="{{ asset('images/icons/arrow-right.png') }}" class="w-6 h-6 mr-2">
                    <span>Compressor คุณภาพสูง (Mitsubishi, Panasonic, etc.) เพิ่มประสิทธิภาพในการประหยัดพลังงาน</span>
                </li>
                <li class="flex items-start">
                    <img src="{{ asset('images/icons/arrow-right.png') }}" class="w-6 h-6 mr-2">
                    <span>Heat Exchanger (Evaporator + Condenser) ใช้ท่อทองแดงประสิทธิภาพสูงในการแลกเปลี่ยนความร้อน ช่วยเพิ่มพื้นที่แลกเปลี่ยนความร้อนมากกว่า 10% ส่งผลให้ประสิทธิภาพการแลกเปลี่ยนความร้อนเพิ่มขึ้น 30% เมื่อเปรียบเทียบกับรุ่นทั่วไป</span>
                </li>
                <li class="flex items-start">
                    <img src="{{ asset('images/icons/arrow-right.png') }}" class="w-6 h-6 mr-2">
                    <span>สามารถรับอุณหภูมิขาเข้า (Inlet Temperature) ได้สูงถึง 60°C</span>
                </li>
                <li class="flex items-start">
                    <img src="{{ asset('images/icons/arrow-right.png') }}" class="w-6 h-6 mr-2">
                    <span>ใช้น้ำยาทำความเย็นที่เป็นมิตรต่อสิ่งแวดล้อม R407c, R404a (Environmental Friendly)</span>
                </li>
            </ul>
        </div>

        <!-- ตารางข้อมูลทางเทคนิค -->
        <div class="mt-8">
            <h2 class="text-xl font-semibold text-gray-900 border-b-2 border-gray-300 pb-2">
                Working Condition & Parameters
            </h2>

            <ul class="mt-6 space-y-3 text-gray-700">
                <li><strong>• Air Inlet Temperature :</strong> 2~65°C</li>
                <li><strong>• Ambient Temperature :</strong> 2~40°C</li>
                <li><strong>• Air Inlet Pressure :</strong> 0.4~1.0MPa</li>
                <li><strong>• Pressure Dew Point :</strong> 2~10°C</li>
                <li><strong>• Pressure Loss :</strong> 0.015MPa</li>
                <li><strong>• Standard Working Condition :</strong> Air Inlet Temp. 60°C, Air Inlet Pressure 0.7MPa (G)</li>
            </ul>
        </div>
    </div>
</div>

<!-- ปุ่มสอบถามข้อมูล -->
<div class="container mx-auto py-6 flex justify-center">
    <a href="#" class="bg-[#4CAF50] text-white flex items-center py-3 px-6 rounded-full hover:bg-green-700">
        <img src="{{ asset('images/icons/line-icon.png') }}" alt="LINE" class="w-6 h-6 mr-2">
        สอบถามข้อมูล
    </a>
</div>

@endsection