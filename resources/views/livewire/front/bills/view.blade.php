<div>
    <h1 class="text-center my-8 text-[#444444] text-4xl">
        الفواتير السابقة
    </h1>

    <div class="flex flex-row-reverse justify-start relative left-52 top-4">
        <a class="p-3 bg-[#717FF5] text-[16px] rounded-md text-white " href="{{ route("bills.old") }}" wire:navigate>
            عرض الفواتير السابقة
        </a>
    </div>

    <div class="overflow-x-auto my-8 w-[1530px] flex justify-center">
        <table class="h-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
            <thead class="text-xs text-white uppercase bg-gray-50 ">
            <tr class="bg-[#1D4EA3] text-center">
                <th scope="col" class="p-4  text-[16px]">
                    رقم الفاتورة
                </th>
                <th scope="col" class="p-4 w-[288px] text-[16px]">
                    اسم العميل
                </th>
                <th scope="col" class="p-4 w-[288px] text-[16px]">
                    تاريخها
                </th>
                <th scope="col" class="p-4  text-[16px]">
                    المبلغ المطلوب
                </th>
                <th scope="col" class="p-4  text-[16px]">
                    حالة الفاتورة
                </th>
            </tr>
            </thead>
            <tbody>
            <tr class="bg-white border-b border-gray-200 text-center">
                <th scope="row" class="px-6 py-4 text-[#9DA9B9] font-medium  whitespace-nowrap ">
                    566489797979
                </th>
                <td class="px-6 py-4 text-[#9DA9B9]">
                    محمد صلاح
                </td>
                <td class="px-6 py-4 text-[#9DA9B9]">
                    10-10-2025
                </td>
                <td class="px-6 py-4 text-[#9DA9B9]">
                    500000
                </td>
                <td class="px-6 py-4">
                    <x-primary-button type="button" class="bg-[#1D4EA3] hover:bg-blue-700 transition-all text-white">
                        مدفوعة
                    </x-primary-button>
                </td>
            </tr>

            </tbody>
        </table>
    </div>

</div>
