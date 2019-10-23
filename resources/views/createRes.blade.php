<!DOCTYPE html>
    <div class="card-body">
        <form method="POST" action="search_Tables">
            @csrf
                <p>Fecha reserva: </p><input type="date" name="reservationDate" placeholder="DD/MM/AAAA" class="form-control mb-2">
                <p>Hora reserva: </p><input type="text" name="reservationHour" placeholder="HH:MM" class="form-control mb-2">
                <p>Número de personas: </p><input type= "name" name="amountOfPeople" placeholder="" class="form-control mb-2">
                <div class="buttonHolder" style="text-align:center">
                <button type="submit">Buscar mesas</button>    
                </div>
        </form>
    </div>