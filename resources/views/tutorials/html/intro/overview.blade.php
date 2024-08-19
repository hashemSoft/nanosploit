<x-app-layout title="تعلم لغة HTML">
    <x-shift :home="true" :next="route('html.editors')" />
    <x-h1>
       <x-slot name="term">HTML </x-slot>
        نظرة عامة عن لغة
        {{-- <x-tag.h-term>HTML</x-tag.h-term> --}}
       <code class="font-sans font-normal text-gray-400">HTML</code>
    </x-h1>
    <x-article>
        {{-- <x-slot name="title"> مفهوم لغة <code class="font-en">HTML</code> </x-slot> --}}
        <x-h2 > مفهوم لغة <code class="font-en font-medium ">HTML</code> </x-h2>
        <p>
            هي لغة تم تصميمها لإنشاء وتنسيق صفحات الويب, وهي تستخدم لتحديد الهيكل
            والمحتوى والعناصر المختلفة الموجودة على الصفحة .
            <br>
            ان <span class="dark:text-white font-en">HTML</span> هي اختصار لـ -
            <span class="text-nowrap">
                "<span dir="ltr" class="font-en text-tag-orange">HyperText Markup Language</span>"
            </span>
            والتي تعني بترجمة غير حرفية 
            <span class="inline-block text-nowrap whitespace-nowrap ">
                 (</span>لغة الترميز القياسية لصفحات الويب<span>)
            </span>
            .
            <br>
            وهي ليست لغة برمجية - بل هي لغة وصفية -
            <span class="text-nowrap">" <span class="dark:text-white">Markup Language</span> "</span>
            ,تستخدم لتنظيم وعرض المحتوى على شبكة الإنترنت.
        </p>
    </x-article>


<x-slot name="sidebar">
    @livewire('sidebar.html')
</x-slot>
</x-app-layout>
