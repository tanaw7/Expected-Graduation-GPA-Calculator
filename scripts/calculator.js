
	var calculate = function(form)
	{
		var C = parseFloat(form.vari1.value);  // Current GPA
		var D = parseFloat(form.vari2.value);  // Desired GPA
		var A = parseFloat(form.vari3.value);  // All Total Credits
		var T = parseFloat(form.vari4.value);  // Credits taken
		var L = A-T;                           // Credits left to take
		var X;                                 // Required steady GPA

		X = ((D*A) - (C*T)) / L;

		console.log(X);
		console.log(C);
		if(X<0 || isNaN(X) || C<0 || C>4 || T>A){
			document.getElementById("resulthere").innerHTML=
			"There must have been an error, try again";
		}
		else{

			if(X>0 && X<=4) {
			document.getElementById("resulthere").innerHTML=
		("<code>Result: </code>" + "From this term onward until you graduate, you should get at least " + X.toFixed(2) + " every term, in order to have " +
			"the final GPA of at least " + D.toFixed(2) + ".");
			}
			else{
			document.getElementById("resulthere").innerHTML=
			"Your desired GPA is too high, you cannot acheive it. Try a lower number.";
			}
		}
		console.log(C);
		$.post("cal_process.php", { first : D,
									second : C,
									third : X,
									fourth : A,
									fifth : T,
									sixth : L } );


		return X;
	};