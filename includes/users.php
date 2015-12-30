<?php
include_once('CamsDatabase.php');	
function userLoggedIn(){
	return (isset($_SESSION['userid']))?true:false;	
}

function userExists($user){
	$db = ConnectionFactory::getFactory()->getConnection();
	$query = $db->prepare("SELECT userid FROM dbo.webLogin WHERE userid = :userid");
	$query->bindValue('userid',$user);
	$query->execute();
	return ($query->fetch()) ? true : false;	
}

function SetUserInfo($userid, $FirstName, $LastName, $Email, $Phone, $Password){
	$Password = sha1($Password);  //encrypt
	$db = ConnectionFactory::getFactory()->getConnection();
	$query = $db->prepare("UPDATE dbo.webLogin set Phone = :phone,FirstName = :firstName, LastName = :lastName, Email=:email, Password = :password WHERE userId = :userId");
	$query->bindValue('userId',$userid);
	$query->bindValue('password',$Password);
	$query->bindValue('firstName',$FirstName);
	$query->bindValue('lastName',$LastName);
	$query->bindValue('email',$Email);
    $query->bindValue('phone',$Phone);
	$query->execute();
	
	$_SESSION['FirstName'] = $FirstName;
	$_SESSION['LastName'] = $LastName;
	$_SESSION['Email'] = $Email;
	$_SESSION['Phone'] = $Phone;
	return true;		
}

function userLogin($user, $password){
	$password = sha1($password);  //encrypt
	$db = ConnectionFactory::getFactory()->getConnection();
	$query = $db->prepare("SELECT userid,Email,Empno,FirstName, LastName, Email,Phone, Agy, Dpt, Role FROM dbo.webLogin WHERE userId = :userId and password = :password");
	$query->bindValue('userId',$user);
	$query->bindValue('password',$password);
	$query->execute();
	$row = $query->fetch(PDO::FETCH_ASSOC);
	if ($row) {
		$userOut['userid'] = $row['userid'];
		$userOut['FirstName'] = $row['FirstName'];
		$userOut['LastName'] = $row['LastName'];
		$userOut['Email'] = $row['Email'];
        $userOut['Empno'] = $row['Empno'];
		$userOut['Phone'] = $row['Phone'];
		$userOut['Agy'] = $row['Agy'];
        $userOut['Dpt'] = $row['Dpt'];
        $userOut['Role'] = $row['Role'];
		}
	return ($row) ? $userOut : false;	
}

function getUsersOptions(){
    $userid = '';
    if (isset($_SESSION['userid'])){
        $userid = $_SESSION['userid'];   
    }
    
    $role = '';
    if (isset($_SESSION['Role'])){
        $role = $_SESSION['Role'];   
    }
    
	$db = ConnectionFactory::getFactory()->getConnection();
	$query = $db->prepare("SELECT userid, Name = FirstName + ' ' + LastName FROM dbo.webLogin");
	$query->execute();
	
	if ($role == 'U'){
	    echo "<option value=\"\" ></option>";
	}else{
	    echo "<option value=\"\"></option>";
	}
	
	while ($row = $query->fetch(PDO::FETCH_ASSOC)){
	    if (($role !='T')&&($row['userid']==$userid)){    
	        echo "<option value=\"".$row['Name']."\" selected=\"selected\">".$row['Name']."</option>";
        }else{
            echo "<option value=\"".$row['Name']."\"\>".$row['Name']."</option>";
        }
	}
}

function getAssignedToOptions(){
    $empno = '';
    if (isset($_SESSION['Empno'])){
        $empno = $_SESSION['Empno'];   
    }
    
    $role = '';
    if (isset($_SESSION['Role'])){
        $role = $_SESSION['Role'];   
    }
    
    $db = ConnectionFactory::getFactory()->getConnection();
    $statement = "select lbr.empno,lbr.name from (".
    "    select Empno= Stnote_2".
    "    from ".ConnectionFactory::FiscDB().".dbo.fmdfsrq".
    "    where stnote_2 <> ''".
    "    group by stnote_2".
    ")srq,".ConnectionFactory::FiscDB().".dbo.tcdflbr lbr".
    " where srq.empno = lbr.empno";
        
    $query = $db->prepare($statement);
    $query->execute();
    
    echo "<option value=\"\"></option>";
    
    while ($row = $query->fetch(PDO::FETCH_ASSOC)){
        if (($role == 'T')&&($row['empno']==$empno)){
            echo "<option value=\"".$row['empno']."\" selected=\"selected\">".$row['name']."</option>";
        }else{
            echo "<option value=\"".$row['empno']."\"\>".$row['name']."</option>";
        }
    }
}	
?>
