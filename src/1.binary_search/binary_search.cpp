
#include <iostream>
#include <vector>
#include <cassert>

using namespace std;

int bin_search(const vector<int> &a, const int target) {
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
    assert(bin_search({1, 3, 12, 545, 1230}, 12) == 2);
    assert(bin_search({1, 3, 12, 545, 1230}, 545) == 3);
    assert(bin_search({1, 3, 12, 545, 1230}, 120) == -1);

    return 0;
}