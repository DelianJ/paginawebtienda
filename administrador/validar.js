function validar(v){
  var id = v.id;
  var tipo = v.tipo;
  var nombre = v.nombre;
  var descrip = v.descripcion;
  var img = v.img;
  var precio = v.precio;
  var gramos = v.gramos;

  if (id.value == "") {
    alert("ingresa id");
    id.style.borderColor = "red";
    return false;
  }
  if (tipo.value == "") {
    alert("ingresa el tipo de producto");
    tipo.style.borderColor = "red";
    return false;
  }
  if (nombre.value == "") {
    alert("ingresa el nombre del producto");
    nombre.style.borderColor = "red";
    return false;
  }
  if (descrip.value == "") {
    alert("ingresa la descripcion de producto");
    descrip.style.borderColor = "red";
    return false;
  }
  if (img.value == "") {
    alert("ingresa la ruta de la imagen del producto");
    img.style.borderColor = "red";
    return false;
  }
  if (precio.value == "") {
    alert("ingresa el precio de producto");
    precio.style.borderColor = "red";
    return false;
  }
  if (gramos.value == "") {
    alert("ingresa los gramos del producto");
    gramos.style.borderColor = "red";
    return false;
  }
  return true;
}
