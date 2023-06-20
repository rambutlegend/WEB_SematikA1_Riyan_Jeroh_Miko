nama= input("nama karyawan: ")
nik= input("nik karyawan: ")
status= input("status (staff/honor): ")
gol= input("golongan (a/b/c): ")
if(status=="staff"):
    gaji=1000000
    if(gol=="a"):
        bonus=200000
    elif(gol=="b"):
        bonus=400000
    elif(gol=="c"):
        bonus=550000
elif(status=="honor"):
    gaji=750000
    if(gol=="a"):
        bonus=150000
    elif(gol=="b"):
        bonus=275000
    elif(gol=="c"):
        bonus=480000
gatot = gaji + bonus
print("gaji =Rp.",gaji)
print("bonus =Rp.",bonus)
print("gaji total =Rp.",gatot)