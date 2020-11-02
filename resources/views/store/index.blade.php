<link rel="stylesheet" href="https://cdn.snipcart.com/themes/v3.0.24/default/snipcart.css" />
<script async src="https://cdn.snipcart.com/themes/v3.0.24/default/snipcart.js"></script>
<div id="snipcart" data-api-key="NTFhMzYzMzItMTEzZi00ODMzLWI3ODYtMDgyZTE3ZmM1Y2M4NjM3Mzk4ODY1NTM0ODAyMzEy" hidden></div>

<x-app-layout>
<style> .snipcart {position:static; z-index:100;} </style>
    <section class="bg-white py-8">
        <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">
            <nav class="w-full z-30 top-0 px-6 py-1">

                <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl" href="#">Merch</a>

                <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">


                    @foreach($products as $product)
                        <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col">
                            <a href="#">
                                <img class="hover:grow hover:shadow-lg" src="https://images.unsplash.com/photo-1467949576168-6ce8e2df4e13?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&h=400&q=80">
                                <div class="pt-3 flex items-center justify-between">
                                    <p class="">{{ $product->name }}</p>
                                    <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
                                    </svg>
                                </div>
                                <p class="pt-1 text-gray-900">$ {{ $product->price }}</p>
                                <button class ="buy-button snipcart-add-item"
                                    data-item-id = "{{ $product->id }}"
                                    data-item-price = "{{ $product->price }}"
                                    data-item-url = "/"
                                    data-item-name = "{{ $product->name }}"
                                    data-item-discription = "{{ $product->description }}">
                                Buy </button>
                            </a>
                        </div>
                    @endforeach

                </div>
            </nav>
        </div>
    </section>
</x-app-layout>