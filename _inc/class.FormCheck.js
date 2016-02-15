// �����޼��� ���
//------------------------------------
function displayMessage(errMessage) {
	alert(errMessage);
}

// �Է��� ���� ����� ���� �������� üũ
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

// email �ּҰ� �������� üũ
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

// �Է��� ���� ����� ���� null���� üũ
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

// �Է��� ���� ����� ���� null�̸�, 
// �ش� �ε����� �´� �����޼����� ����ϱ� ����
// üũ�Ϸ��� �ϴ� ��ҵ��� �迭 �ε����� ����
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

// �Է��� ��ҵ��� ���� �˻�
//----------------------------------------------
function checkFormElements(cn, msg) {
	var check;
	var theIndex;
	//
	// ���� null���θ� üũ�ϰ��� �ϴ� �Է����� ��ҵ�
	//
	var checkNames = cn;
	//
	// �ش� ��ҿ� �����ϴ� �����޼���
	//
	var errMessage = msg;

	for(var i = 0; i < this.form.elements.length; i++) {
		//
		// �ϴ� ���� null ���ο� ������� �ش� ����� �ε����� ����
		//
		theIndex = getErrorIndex(checkNames, this.form.elements[i].name);
		//
		// ���� ����Ǿ� �ִ� ��ҵ��� ������ 
		// ������ �˻����� �ʾƵ� �Ǵ� ��ҵ��� ����
		// üũ�ؾ� �ϴ� ����̸�
		//
		if(theIndex != -1 && theIndex <= cn.length - 1) {
			//
			// ���� null���� üũ
			//
			check = checkValue(this.form.elements[i].value);
			//
			// ���� null�̸�
			//
			if(check == false) {
				//
				// �ش� �ε����� �˸��� �����޼��� ���
				//
				displayMessage(errMessage[theIndex]);
				//
				// �ش� ��ҿ� ��Ŀ���� ��
				//
				this.form.elements[i].focus();
				return false;
			//
			// ���� null�� �ƴϸ�
			//
			} else {
				//
				// üũ��Ұ� �������� �ƴϸ�
				// ����ؼ� ���� üũ
				//
				if(theIndex < cn.length - 1) {
					continue;
				//
				// ������ ��Ұ��� null�� �ƴϸ�
				//
				} else {
					return true;
				}
			}
		} else {
			//
			// ���ʿ��� ��Ҵ� skip
			//
			continue;
		} 
	}
}

// class ������
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
