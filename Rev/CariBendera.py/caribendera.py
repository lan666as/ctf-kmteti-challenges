amaImfihlo = "z|%t%xr%uL`M-^M0c0AbcM-MFE055a4ce`eN"
alfabhethi = "!\"#$%&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ"+ \
            "[\\]^_`abcdefghijklmnopqrstuvwxyz{|}~"

def qeda(fih):
    phenduka = 47
    kukhonjisiwe = ""
    for c in fih:
        inkomba = alfabhethi.find(c)
        okwangempela_inkomba = (inkomba + phenduka) % len(alfabhethi)
        kukhonjisiwe = kukhonjisiwe + alfabhethi[okwangempela_inkomba]
    print(kukhonjisiwe)

def khetha_okukhulu():
    inani_lomsebenzisi_1 = input("What's your first number? ")
    inani_lomsebenzisi_2 = input("What's your second number? ")
    inani_elikhulu = inani_lomsebenzisi_1

    if inani_lomsebenzisi_1 > inani_lomsebenzisi_2:
        inani_elikhulu = inani_lomsebenzisi_1
    elif inani_lomsebenzisi_1 < inani_lomsebenzisi_2:
        inani_elikhulu = inani_lomsebenzisi_2

    print( "The number with largest positive magnitude is "
        + str(inani_elikhulu) )

khetha_okukhulu()
