<form action="{{ route('episodes.filter') }}" method="get"  class="mt-5">
    <label for="name">Nombre:</label>
    <input type="text" name="name" id="name">
    <br>
    
    <label for="episode">Temporada:</label>
    <select name="episode" id="episode">
        
        <option value="">-- Seleccione --</option>
        <option value="S01">Primer temporada</option>
        <option value="S02">Segunda temporada</option>
        <option value="S03">Tercer temporada</option>
    </select>
    <br>
    <button type="submit" class="btn btn-primary">Buscar</button>
</form>