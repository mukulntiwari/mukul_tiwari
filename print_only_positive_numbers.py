numbers = input("list=")

number_list = [int(x) for x in numbers.split()]

positive_numbers = [num for num in number_list if num > 0]

if positive_numbers:
    print("Output:")
    for num in positive_numbers:
        print(num)
else:
    print("No positive numbers found in the input.")

