<?php

// LDAP variables
$ldaphost = "MRHA6DC01";  // your ldap servers
$ldap_dn = "CN=LDAP Account,OU=Service Accounts,OU=Corporate,DC=MRHA6";
//$ldap_dn = "cn=read-only-admin,dc=example,dc=com";
$ldap_password = "Service09";
$ldapport = 389; // your ldap server's port number

// Connecting to LDAP
//$ldapcon = ldap_connect($ldaphost, $ldapport);
$ldapcon = ldap_connect($ldaphost);
          //or die("Could not connect to $ldaphost");

ldap_set_option($ldapcon, LDAP_OPT_PROTOCOL_VERSION, 3);

if(ldap_bind($ldapcon, $ldap_dn, $ldap_password)){
    
    echo "Connection Established";
}else{
    
    echo "Unable to connect to Server";
}



/*if($ldapconn){
    
    echo "LDAP Connection is sucessful";
}else{
    echo "Unable to connect to LDAP Server";
}*/

?>