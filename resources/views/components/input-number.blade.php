@props(['disabled' => false, 'value'=>0, 'step'=>0.01, 'min'=>null, 'max'=>null])

<div x-data="{ 
    value: @js($value),
    step: @js($step),
    min: @js($min),
    max: @js($max),
    disabled: @js($disabled),
    decrement(){
      if(this.disabled){
            return;
        }
        if(this.min && this.value<=this.min){
            return;
        }
        this.value -= parseFloat(this.step);
        this.value = Math.round(this.value * 100) / 100;
    },
    increment(){
    if(this.disabled){
            return;
        }
        if(this.max && this.value>=this.max){
            return;
        }
        this.value += parseFloat(this.step);
        this.value = Math.round(this.value * 100) / 100;
    }
}">
    <div class="flex items-stretch bg-gray-100 border border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm text-gray-800 disabled:text-gray-500">
      <button type="button" class="w-12 rounded-l-md border-0 active:border active:border-indigo-500 active:outline-indigo-500 active:outline active:outline-1 active:outline-indigo-500" x-on:click="decrement()">
        &minus;
      </button>

      <x-input type="number" x-model="value" x-bind:step="step" {{ $attributes->merge(['class' => 'flex-grow mx-px rounded-none border-transparent text-center [-moz-appearance:_textfield] [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none', 'disabled'=>$disabled]) }} />
  
      <button type="button" class="w-12 rounded-r-md border-0 active:border active:border-indigo-500 active:outline-indigo-500 active:outline active:outline-1 active:outline-indigo-500" x-on:click="increment()">
        &plus;
      </button>
    </div>
</div>