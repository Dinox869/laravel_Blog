<div class="relative flex lg:inline-flex item-center bg-gray-100 rounded-xl px-3 py-2">
    <form method="GET" action="/home">
        <input type="text" name="search" placeholder="Find something" id="search" value="{{request('search')}}" class="bg-transparent placeholder-black font-semibold text-sm focus-within:outline-none">
    </form>
</div>
