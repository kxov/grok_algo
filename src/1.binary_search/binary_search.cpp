
#include <iostream>
#include <vector>

using namespace std;

int bin_search(vector<int> &a, int target) {
    int l = 0, r = a.size() - 1;

    while(l <= r) {
        int m = l + (r - 1) / 2;

        if (a[m] == target) return m;

        if (a[m] < target)
            l = m + 1;
        else
            r = m - 1;
    }

    return -1; 
}

int main() {
    vector<int> a = {1, 3, 12, 545, 1230};

    std::cout << bin_search(a, 12) << std::endl;
}