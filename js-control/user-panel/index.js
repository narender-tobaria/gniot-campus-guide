
setInterval(()=>{
    document.querySelector(".carousel-control-next").click();
},3000);

const gniot_courses = document.querySelector("#gniot-courses");
const gims_courses = document.querySelector("#gims-courses");
const gips_courses = document.querySelector("#gips-courses");

gniot_courses.classList.replace("d-block","d-none");
gims_courses.classList.replace("d-block","d-none");
gips_courses.classList.replace("d-block","d-none");

function showHideCollgeCourses(collge){
    if(collge === "gniot"){
        gniot_courses.classList.replace("d-none","d-block");
        gims_courses.classList.replace("d-block","d-none");
        gips_courses.classList.replace("d-block","d-none");
    }
    else if(collge === "gims"){
        gniot_courses.classList.replace("d-block","d-none");
        gims_courses.classList.replace("d-none","d-block");
        gips_courses.classList.replace("d-block","d-none");
    }
    else if(collge === "gips"){
        gniot_courses.classList.replace("d-block","d-none");
        gims_courses.classList.replace("d-block","d-none");
        gips_courses.classList.replace("d-none","d-block");
    }
}