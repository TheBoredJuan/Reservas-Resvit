<!DOCTYPE html>
    <div class="card-body">
        <form method="POST" action="conf_Final">
            @csrf
                <p>Fecha reserva: </p><input type="date" name="reservationDate" placeholder="DD/MM/AAAA" class="form-control mb-2">
                <p>Hora reserva: </p><input type="text" name="reservationHour" placeholder="HH:MM" class="form-control mb-2">
                <p>Número de personas: </p><input type= "text" name="availableChairs" placeholder="" class="form-control mb-2">
                <p>id Restaurante: </p><input type= "number" name="idRestaurant" placeholder="" class="form-control mb-2">
                <p>id Mesa: </p><input type= "number" name="idTable" placeholder="" class="form-control mb-2">
                <p>persona creadora: </p><input type= "number" name="resCreator" placeholder="" class="form-control mb-2">
                <p>id Decoracion: </p><input type= "number" name="idDecoration" placeholder="" class="form-control mb-2">
                <p>A nombre de: </p><input type= "text" name="personInCharge" placeholder="" class="form-control mb-2">
                <p>Tipo reserva:</p><input type="number" name="typeReservation" placeholder="" class="form-control mb-2">
                <p>tarjeta: </p><input type= "number" name="cardNumber" placeholder="" class="form-control mb-2">
                <p>Total: </p><input type= "number" name="total" placeholder="" class="form-control mb-2">
                <p>comentarios: </p><input type= "text" name="comments" placeholder="" class="form-control mb-2">
                
                <div class="buttonHolder" style="text-align:center">
                <button type="submit">Confirmar</button>    
                </div>
        </form>
    </div>