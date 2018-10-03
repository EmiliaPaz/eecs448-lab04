var validate = function() {

	let quantities = [
		parseInt(document.getElementById('tacos_q').value,10),
		parseInt(document.getElementById('burger_q').value,10),
		parseInt(document.getElementById('hotdog_q').value,10)
	]

    for(let i=0; i<3; i++){
        if(quantities[i] <= 0)
        {
            alert("Invalid quantity. You must enter at least one of each item");
            return false;
        }
    }

    // HTML verifies user name is in the form of an email address

    // HTML requires an input for password

    // HTML defaults free shipping option

	return true
}
