def get_set_from_input(prompt):
    return set(map(int, input(prompt).split()))

E = get_set_from_input("Enter the elements of set E (space-separated): ")
N = get_set_from_input("Enter the elements of set N (space-separated): ")

union_result = E.union(N)
intersection_result = E.intersection(N)
difference_result = E.difference(N)
symmetric_difference_result = E.symmetric_difference(N)

print(f"Union of E and N is {union_result}")
print(f"Intersection of E and N is {intersection_result}")
print(f"Difference of E and N is {difference_result}")
print(f"Symmetric difference of E and N is {symmetric_difference_result}")
