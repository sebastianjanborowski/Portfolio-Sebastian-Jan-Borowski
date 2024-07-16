"use strict";
var __awaiter = (this && this.__awaiter) || function (thisArg, _arguments, P, generator) {
    function adopt(value) { return value instanceof P ? value : new P(function (resolve) { resolve(value); }); }
    return new (P || (P = Promise))(function (resolve, reject) {
        function fulfilled(value) { try { step(generator.next(value)); } catch (e) { reject(e); } }
        function rejected(value) { try { step(generator["throw"](value)); } catch (e) { reject(e); } }
        function step(result) { result.done ? resolve(result.value) : adopt(result.value).then(fulfilled, rejected); }
        step((generator = generator.apply(thisArg, _arguments || [])).next());
    });
};
document.addEventListener('DOMContentLoaded', () => {
    const id_button = document.getElementById("button");
    id_button.addEventListener("click", (event) => __awaiter(void 0, void 0, void 0, function* () {
        event.preventDefault();
        const Full_Name_id = document.getElementById("Full_Name");
        const Subdivision_id = document.getElementById("Subdivision");
        const Position_id = document.getElementById("Position");
        const Status_id = document.getElementById("Status");
        const People_Partner_id = document.getElementById("People_Partner");
        const Out_of_Balance_id = document.getElementById("Out_of_Balance");
        const Id_id = document.getElementById("Id");
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
                const response = yield fetch(url, {
                    method: 'POST',
                    body: jsonData,
                    headers: {
                        'Content-Type': 'application/json',
                    },
                });
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                const data = yield response.json();
                alert("Dodano aktualizacje usera");
                console.log(data);
            }
            catch (error) {
                console.error('There was a problem with the fetch operation:', error);
                alert('Nie dodano aktualizacji usera');
            }
        }
        else {
            alert('Wszystkie wymagane pola muszą być wypełnione');
        }
    }));
});
