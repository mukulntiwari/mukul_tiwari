def x(n):
    y = [0, 1]

    if n <= 1:
        return y[:n + 1]

    for i in range(2, n + 1):
        next_number = y[i - 1] + y[i - 2]
        y.append(next_number)

    return y

n = int(input("Enter the number of Fibonacci numbers required: "))

if n < 0:
    print("Please enter a 0 or positive numbers")
else:
    z = x(n)
    print("Fibonacci sequence:")
    print(z)
