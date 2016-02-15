// 에러메세지 출력
//------------------------------------
function displayMessage(errMessage) {
	alert(errMessage);
}

// 입력폼 안의 요소의 값이 숫자인지 체크
//---------------------------------------
function checkNumber(cn, msg) {
	var field = "";
	for(var i = 0; i < cn.length; i++) {
		field = eval("this.form." + cn[i]);
		if(isNaN(field.value)) {
			if(msg.length > 1) {
				displayMessage(msg[i]);

			} else {
				displayMessage(msg[0]);
			}
			field.select();
			return false;
		}
	}
	return true;
}

// email 주소가 적당한지 체크
//---------------------------------------
function checkEmail(cn, msg) {
	var regexp = /(\w+)@(\w+|\w+-\w+)\.(\w+|\w+\.\w+)$/;
	var email = eval("this.form." + cn);
	if(!regexp.test(email.value)) {
		displayMessage(msg);
		email.select();
		return false;
	}
	return true;
}

// 입력폼 안의 요소의 값이 null인지 체크
//---------------------------------------
function checkValue(value) {
	var check;
	if(!value) {
		check = false;
	} else {
		check = true;
	}
	return check;
}

// 입력폼 안의 요소의 값이 null이면, 
// 해당 인덱스에 맞는 에러메세지를 출력하기 위해
// 체크하려고 하는 요소들의 배열 인덱스를 리턴
//-----------------------------------------------
function getErrorIndex(checkNames, name) {
	var theIndex;
	for(var index = 0; index < checkNames.length; index++) {
		if(checkNames[index] == name) {
			theIndex = index;
			break;
		} else {
			theIndex = -1;
		}
	}
	return theIndex;
}

// 입력폼 요소들의 값을 검사
//----------------------------------------------
function checkFormElements(cn, msg) {
	var check;
	var theIndex;
	//
	// 값의 null여부를 체크하고자 하는 입력폼의 요소들
	//
	var checkNames = cn;
	//
	// 해당 요소에 대응하는 에러메세지
	//
	var errMessage = msg;

	for(var i = 0; i < this.form.elements.length; i++) {
		//
		// 일단 값의 null 여부에 상관없이 해당 요소의 인덱스를 구함
		//
		theIndex = getErrorIndex(checkNames, this.form.elements[i].name);
		//
		// 위에 선언되어 있는 요소들을 제외한 
		// 나머지 검사하지 않아도 되는 요소들을 제거
		// 체크해야 하는 요소이면
		//
		if(theIndex != -1 && theIndex <= cn.length - 1) {
			//
			// 값이 null인지 체크
			//
			check = checkValue(this.form.elements[i].value);
			//
			// 값이 null이면
			//
			if(check == false) {
				//
				// 해당 인덱스에 알맞은 에러메세지 출력
				//
				displayMessage(errMessage[theIndex]);
				//
				// 해당 요소에 포커스를 줌
				//
				this.form.elements[i].focus();
				return false;
			//
			// 값이 null이 아니면
			//
			} else {
				//
				// 체크요소가 마지막이 아니면
				// 계속해서 값을 체크
				//
				if(theIndex < cn.length - 1) {
					continue;
				//
				// 마지막 요소가지 null이 아니면
				//
				} else {
					return true;
				}
			}
		} else {
			//
			// 불필요한 요소는 skip
			//
			continue;
		} 
	}
}

// class 생성자
//----------------------------------------------
function FormCheck(form) {
	this.form = form;
	this.checkValue = checkValue;
	this.displayMessage = displayMessage;
	this.getErrorIndex = getErrorIndex;
	this.checkFormElements = checkFormElements;
	this.checkNumber = checkNumber;
	this.checkEmail = checkEmail;
}
