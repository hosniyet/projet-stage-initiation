//verifier une chaine alphabetique 
function verifnom(ch)
{
 for(var i=0;i<ch.length;i++)
 {
   
   var c=ch.charAt(i).toUpperCase();
   if(  ( (c<'A')||(c>'Z') )&&(c!=' ')  )
     return false;
 }
 return true;
}
//verifier le num de CIN 
function verifcin(ch)
{
  for(var i=0;i<ch.length;i++)
  { c=ch.charAt(i);
    if( (c<'0') || (c>'9') || (ch.length!=8) )
      return false;
  }

  return true;
}
function veriftel(ch)
{ if(  (ch.charAt(0)!='2') && (ch.charAt(0)!='9') && (ch.charAt(0)!='5')&& (ch.charAt(0)!='7'))
   {return false}
  else
  {
  for(var i=1;i<ch.length;i++)
  { c=ch.charAt(i);
    if( (c<'0') || (c>'9') || (ch.length!=8) )
      return false;
  }
  }
  return true;
}
function veriflaneo(ch)
{
  for(var i=0;i<ch.length;i++)
  {
    var c=ch.charAt(i).toUpperCase();
    if(  ((c<'A')||(c>'Z')) && ((c<'0') || (c>'9')) )
      return false;
  }
  return true;

}
function verif()
{
  nom=f.nom.value;
  cin=f.cin.value;
  tel=f.tel.value;
  lieu=f.lieu.value;
  add=f.add.value;
  niv=f.niv.value;
  etab=f.etab.value;
  organ=f.organ.value;
  per1=f.per1.value;
  per2=f.per2.value;

  if(verifnom(nom)==false)
  {
     alert("verifier votre nom et prenom");
     return false;
  }

  if(verifcin(cin)==false) 
  {
    alert("verifier votre numéro de CIN");
    return false;
  }

  if(veriftel(tel)==false) 
  {
    alert("verifier votre numéro de téléphone");
    return false;
  }

  if(veriflaneo(lieu)==false)
  {
    alert("verifier votre Lieu de naissance");
    return false;
  }

  if(veriflaneo(add)==false)
  {
    alert("verifier votre adresse ");
    return false;
  }

  if(f.type.selectedIndex==0)
  {
    alert("choix type de stage est obligatoire");
    return false;
  }

  if(   (!f.c1[0].checked)&&(!f.c1[1].checked)                 )
  {
    alert("choix de stage paye oui ou  non est obligatoire");
    return false;
  }

}