@props(['disabled' => false])

<input {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full disabled:bg-gray-50 disabled:text-gray-500', 'type'=>'text', 'disabled'=>$disabled]) !!} />
