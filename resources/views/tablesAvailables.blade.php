<!DOCTYPE html>
    <div class="card-body">
        <form method="POST" action="before_Conf">
            @csrf
            <input type="radio" name="idTable" value=1> Mesa 1<br>
            <input type="radio" name="idTable" value=2> Mesa 2<br>
            <input type="radio" name="idTable" value=3> Mesa 3<br>  
            <input type="submit" value="Continuar">
        </form>

    </div>