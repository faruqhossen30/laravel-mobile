<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        Custom Price Range Slider--GFG
    </title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width,
                   initial-scale=1.0">


    <style>

    </style>
</head>

<body>
    <form action="{{ route('search') }}" method="GET">
        <div class="slider-container">
            <input type="range" min="100000" max="300000" value="163400" id="minPrice" oninput="updateMinPrice(this.value)">
            <input type="range" min="100000" max="300000" value="216050" id="maxPrice" oninput="updateMaxPrice(this.value)">

            <div>
                <label for="minPrice">Tk. <span id="minPriceLabel">163400</span></label>
                <label for="maxPrice">Tk. <span id="maxPriceLabel">216050</span></label>
            </div>

            <button type="submit">Search</button>
        </div>
    </form>


    <script>
     function updateMinPrice(value) {
    document.getElementById('minPriceLabel').innerText = value;
}

function updateMaxPrice(value) {
    document.getElementById('maxPriceLabel').innerText = value;
}
    </script>
</body>

</html>
