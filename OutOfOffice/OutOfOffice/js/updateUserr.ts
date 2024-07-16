document.addEventListener('DOMContentLoaded', () => {
    const id_button = document.getElementById("button") as HTMLInputElement;

    id_button.addEventListener("click", async (event) => {
        event.preventDefault();

        const Full_Name_id = document.getElementById("Full_Name") as HTMLInputElement;
        const Subdivision_id = document.getElementById("Subdivision") as HTMLInputElement;
        const Position_id = document.getElementById("Position") as HTMLInputElement;
        const Status_id = document.getElementById("Status") as HTMLInputElement;
        const People_Partner_id = document.getElementById("People_Partner") as HTMLInputElement;
        const Out_of_Balance_id = document.getElementById("Out_of_Balance") as HTMLInputElement;
        const Id_id = document.getElementById("Id") as HTMLInputElement;

        if (!Full_Name_id || !Subdivision_id || !Position_id || !Status_id || !People_Partner_id || !Out_of_Balance_id || !Id_id) {
            console.error('One or more input elements are missing');
            alert('Brakuje jednego lub więcej elementów wejściowych.');
            return;
        }

        const Full_Name = Full_Name_id.value;
        const Subdivision = Subdivision_id.value;
        const Position = Position_id.value;
        const Status = Status_id.value;
        const People_Partner = People_Partner_id.value;
        const Out_of_Balance = Out_of_Balance_id.value;
        const Id = Id_id.value;

        if (Full_Name.length >= 1 && Subdivision.length >= 1 && Position.length >= 1 && Status.length >= 1) {
            const formData = {
                Full_Name: Full_Name,
                Subdivision: Subdivision,
                Position: Position,
                Status: Status,
                People_Partner: People_Partner,
                Out_of_Balance: Out_of_Balance,
                Id: Id
            };

            const url = "http://localhost/test_Praca/OutOfOffice/calculations/update.php";
            const jsonData = JSON.stringify(formData);

            try {
                const response = await fetch(url, {
                    method: 'POST',
                    body: jsonData,
                    headers: {
                        'Content-Type': 'application/json',
                    },
                });

                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }

                const data = await response.json();
                alert("Dodano aktualizacje usera");
                console.log(data);
            } catch (error) {
                console.error('There was a problem with the fetch operation:', error);
                alert('Nie dodano aktualizacji usera');
            }
        } else {
            alert('Wszystkie wymagane pola muszą być wypełnione');
        }
    });
});
