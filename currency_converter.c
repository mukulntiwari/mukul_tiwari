#include <stdio.h>

int main() {
    int choice;
    float amount, converted;
    
    printf("Currency Converter\n");
    printf("------------------\n");
    printf("Select the conversion option:\n");
    printf("1. USD to INR\n");
    printf("2. INR to USD\n");
    printf("3. EUR to USD\n");
    printf("4. USD to EUR\n");
    printf("5. GBP to INR\n");
    printf("6. INR to GBP\n");
    
    printf("Enter your choice (1-6): ");
    scanf("%d", &choice);

    if (choice < 1 || choice > 6) {
        printf("Invalid choice. Exiting.\n");
        return 1;
    }

    printf("Enter the amount: ");
    scanf("%f", &amount);

    switch(choice) {
        case 1: // USD to INR
            converted = amount * 83.10;  // Example rate
            printf("Converted amount: ₹%.2f\n", converted);
            break;
        case 2: // INR to USD
            converted = amount / 83.10;
            printf("Converted amount: $%.2f\n", converted);
            break;
        case 3: // EUR to USD
            converted = amount * 1.08;
            printf("Converted amount: $%.2f\n", converted);
            break;
        case 4: // USD to EUR
            converted = amount / 1.08;
            printf("Converted amount: €%.2f\n", converted);
            break;
        case 5: // GBP to INR
            converted = amount * 104.25;
            printf("Converted amount: ₹%.2f\n", converted);
            break;
        case 6: // INR to GBP
            converted = amount / 104.25;
            printf("Converted amount: £%.2f\n", converted);
            break;
        default:
            printf("Unexpected error.\n");
    }

    return 0;
}
