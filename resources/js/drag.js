const draggables = document.querySelectorAll(".task");
const droppables = document.querySelectorAll(".swim-lane");
// let id = "";

// document.getElementById("show-form-btn").addEventListener("click", function () {
//     document.getElementById("add-form").style.display = "inline-block";
//     document.getElementById("show-form-btn").style.display = "none";
// });

// document.getElementById("hide-form-button").addEventListener("click", () => {
//     document.getElementById("add-form").style.display = "none";
//     document.getElementById("show-form-btn").style.display = "block";
// });
let newStatus = "";
draggables.forEach((task) => {
    task.addEventListener("dragstart", () => {
        task.classList.add("is-dragging");
    });
    task.addEventListener("dragend", () => {
        console.log(task.dataset.id);
        console.log(newStatus);
        const taskId = task.dataset.id;
        // const requestBody = {
        //     status: newStatus,
        //     jobId: task.dataset.id
        // };
        //Ajax request here
        fetch(`/update-task-status/${taskId}`, {
            method: "PATCH",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content"),
            },
            body: JSON.stringify({ status: newStatus }),
        })
            .then((response) => {
                if (!response.ok) {
                    throw new Error("Failed to update task status");
                }
                return response.json();
            })
            .then((data) => {
                console.log(data.message); // Log success message
            })
            .catch((error) => {
                console.error(error.message); // Log error message
            });

        task.classList.remove("is-dragging");
    });
});

droppables.forEach((zone) => {
    zone.addEventListener("dragover", (e) => {
        e.preventDefault();

        const bottomTask = insertAboveTask(zone, e.clientY);
        const curTask = document.querySelector(".is-dragging");

        if (!bottomTask) {
            zone.appendChild(curTask);
            newStatus = zone.querySelector("h3").textContent; //gets the status form droppables
            // console.log(curTask);
        } else {
            zone.insertBefore(curTask, bottomTask);
            newStatus = zone.querySelector("h3").textContent;

            // console.log(curTask);
        }
    });
});

const insertAboveTask = (zone, mouseY) => {
    const els = zone.querySelectorAll(".task:not(.is-dragging)");

    let closestTask = null;
    let closestOffset = Number.NEGATIVE_INFINITY;

    els.forEach((task) => {
        const { top } = task.getBoundingClientRect();

        const offset = mouseY - top;

        if (offset < 0 && offset > closestOffset) {
            closestOffset = offset;
            closestTask = task;
        }
    });

    return closestTask;
};
