#include <iostream>
#include <iomanip>
#include <string>
#include <algorithm>
using namespace std;

// Function to convert any unit to meters
double toMeters(double value, const string& unit) {
    if (unit == "miles") return value * 1609.34;
    if (unit == "kilometers") return value * 1000;
    if (unit == "meters") return value;
    if (unit == "feet") return value * 0.3048;
    return -1; // Invalid unit
}

int main() {
    double inputValue;
    string inputUnit;

    cout << "Enter distance (value and unit - miles/kilometers/meters/feet): ";
    cin >> inputValue >> inputUnit;

    // Convert unit to lowercase for consistency
    transform(inputUnit.begin(), inputUnit.end(), inputUnit.begin(), ::tolower);

    double meters = toMeters(inputValue, inputUnit);

    if (meters < 0) {
        cout << "Invalid unit entered!" << endl;
        return 1;
    }

    // Convert from meters to all units
    double inMiles = meters / 1609.34;
    double inKilometers = meters / 1000;
    double inFeet = meters / 0.3048;

    cout << fixed << setprecision(4);
    cout << "\nEquivalent distances:\n";
    cout << "Miles      : " << inMiles << endl;
    cout << "Kilometers : " << inKilometers << endl;
    cout << "Meters     : " << meters << endl;
    cout << "Feet       : " << inFeet << endl;

    return 0;
}

