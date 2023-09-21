
def most_frequent(x):
    y = {}
    for z in x:
        if z.isalpha(): 
            z = z.lower()  
            if z in y:
                y[z] += 1
            else:
                y[z] = 1

    sorted_zs = sorted(y.items(), key=lambda x: x[1], reverse=True)

    for z, frequency in sorted_zs:
        print(f"{z} = {frequency}", end=" ")

x = input("please enter a string=")
most_frequent(x)

