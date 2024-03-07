<select id="country">
    @foreach ($list as $item)
        <option value="{{ $item }}">{{ $item }}</option>
    @endforeach
</select>
<button id="showbtn">
    show
</button>
<h2 id="display"></h2>


<script>
    document.getElementById("showbtn").addEventListener("click",(event)=>{
        event.preventDefault();
        let country = document.getElementById('country').value;
        document.getElementById("display").innerText = country;
    })
</script>
