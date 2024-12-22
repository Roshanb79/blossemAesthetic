
var visible=false;
function toggleFlow(box){
	let course=box.target;
	if (!visible) {
		let allBox=document.querySelector('.box')
		allBox.forEach((eachBox) => {
			eachBox.style.visibility="hidden";
		})
		course.style.visibility="visible";
		visible=true;
	}
	else{
		let allBox=document.querySelector('.box')
		allBox.forEach((eachBox) => {
			eachBox.style.visibility="hidden";
		});
		course.style.visibility="hidden";
		visible=false;
	}
}