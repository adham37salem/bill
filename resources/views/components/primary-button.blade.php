@props(["type" => "button" , "class" => ""])
<button type="{{ $type }}" {{ $attributes->merge(["class" => "bg-[#4154F1] w-[205px] text-white px-6 py-3 rounded-lg hover:bg-blue-700 $class"]) }}>
    {{ $slot }}
</button>
