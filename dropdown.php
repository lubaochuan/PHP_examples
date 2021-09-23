<form action="echo_params.php">
  <select name="favoritecharacter">
    <option>Jerry</option>
    <option>George</option>
    <option selected>Kramer</option>
    <option>Elaine</option>
  </select>
  <input type="submit" />
</form>

<form action="echo_params.php">
  <select name="favoritecharacter[]" size="3" multiple>
    <option>Jerry</option>
    <option value="G">George</option>
    <option>Kramer</option>
    <option>Elaine</option>
    <option selected>Newman</option>
  </select>
  <input type="submit" />
</form>

<form action="echo_params.php">
  <select name="favoritecharacter">
    <optgroup label="Major Characters">
      <option>Jerry</option>
      <option>George</option>
      <option>Kramer</option>
      <option>Elaine</option>
    </optgroup>
    <optgroup label="Minor Characters">
      <option>Newman</option>
      <option>Susan</option>
    </optgroup>
  </select>
  <input type="submit" />
  </form>