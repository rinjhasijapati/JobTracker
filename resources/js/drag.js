const draggables = document.querySelectorAll(".task");
const droppables = document.querySelectorAll(".swim-lane");

document.getElementById("show-form-btn").addEventListener("click", function () {
    document.getElementById("add-form").style.display = "inline-block";
    document.getElementById("show-form-btn").style.display = "none";
});

document.getElementById("hide-form-button").addEventListener("click", () => {
    document.getElementById("add-form").style.display = "none";
    document.getElementById("show-form-btn").style.display = "block";
});

draggables.forEach((task) => {
    task.addEventListener("dragstart", () => {
        task.classList.add("is-dragging");
    });
    task.addEventListener("dragend", () => {
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
        } else {
            zone.insertBefore(curTask, bottomTask);
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
