
#include <iostream>
#include <vector>
#include <cassert>

using namespace std;

int bin_search_rec(const vector<int> &nums, const int target, const int lo, const int hi) {
    if (lo > hi) return -1;
    const int mi = lo + (hi - lo) / 2;
    if (nums[mi] == target) return mi;
    if (nums[mi] < target) return bin_search_rec(nums, target, mi + 1, hi);
    return bin_search_rec(nums, target, lo, mi - 1);
}

int bin_search(const vector<int> &nums, const int target) {
    int l = 0, r = nums.size() - 1;

    while(l <= r) {
        int m = l + (r - 1) / 2;
        if (nums[m] == target) return m;
        if (nums[m] < target)
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

    assert(bin_search_rec({1,2,3,4,5,6,7,8,9}, 4, 0, 8) == 3);
    assert(bin_search_rec({1,2,3,4,5,6,7,8,9}, 10, 0, 8) == -1);

    return 0;
}