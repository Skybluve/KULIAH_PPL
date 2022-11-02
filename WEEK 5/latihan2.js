var hasil = operasi(9,2);
function operasi(a,b){
    var a = 9;
    var b = 2;
    var pangkat  = (a**b);
    var modulus = (a % b);

    console.log("Nilai A = ", (a));
    console.log("Nilai B = ", (b));
    console.log("A pangkat B Adalah",+ pangkat);    
    console.log("A Modulus B adalah", + modulus);
    console.log("A Sama Dengan B adalah",(a == b));
    console.log("A Lebih Besar B adalah",(a > b));
    console.log("A Lebih Kecil B adalah",(a < b));
    console.log("A Tidak Sama B adalah",(a != b));

}