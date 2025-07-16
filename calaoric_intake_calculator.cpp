#include <iostream>
#include <iomanip>
#include <string>
#include <map>
using namespace std;

int main() {
    // Declare and initialize the calorie map manually
    map<string, double> foodCalories;
    foodCalories["apple"] = 52;   // calories per 100 grams
    foodCalories["rice"] = 130;   // calories per 100 grams
    foodCalories["egg"] = 78;     // calories per egg (unit)

    double totalCalories = 0.0;
    string food;
    double quantity;
    char choice;

    cout << "=== Caloric Intake Calculator ===" << endl;
    cout << fixed << setprecision(2);

    do {
        cout << "\nEnter food item (apple, rice, egg): ";
        cin >> food;

        // Convert input to lowercase (manually, for C++98)
        for (int i = 0; i < food.length(); ++i) {
            food[i] = tolower(food[i]);
        }

        // Check if food exists in the map
        if (foodCalories.find(food) == foodCalories.end()) {
            cout << "Food item not found in database. Try again." << endl;
            continue;
        }

        // Ask for quantity
        if (food == "egg") {
            cout << "Enter quantity (number of eggs): ";
        } else {
            cout << "Enter quantity (in grams): ";
        }

        cin >> quantity;

        // Calculate calories
        double calories;
        if (food == "egg") {
            calories = foodCalories[food] * quantity;
        } else {
            calories = (foodCalories[food] / 100.0) * quantity;
        }

        totalCalories += calories;

        cout << "Calories for this item: " << calories << " kcal" << endl;

        // Ask user if they want to add another item
        cout << "Do you want to add another item? (y/n): ";
        cin >> choice;

    } while (choice == 'y' || choice == 'Y');

    // Final total
    cout << "\nTotal caloric intake: " << totalCalories << " kcal" << endl;

    return 0;
}

