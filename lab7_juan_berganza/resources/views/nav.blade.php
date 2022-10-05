<script>
    function navigate(e) {
        let val = e.target.value;
        if (val != "")
            location.href = "/" + val;
    }
</script>

<select name="gender" type="text" onchange="navigate(event)">
    <option value="" selected>- Navegación -</option>
    <option value="students">Estudiantes</option>
    <option value="teachers">Profesores</option>
    <option value="courses">Cursos</option>
</select>