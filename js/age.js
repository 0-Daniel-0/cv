var birthday = new Date('2002')

function updateaAge() {
	var ageElement = document.getElementById('age')
	var age = new Date().getFullYear() - birthday.getFullYear()
	ageElement.textContent = age + ' jaar'
}

updateaAge()
