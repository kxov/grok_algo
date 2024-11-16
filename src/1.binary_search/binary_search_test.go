package main

import (
	"fmt"
	"testing"
)

func BinarySearch(nums []int, key int) int {
	lo := 0
	hi := len(nums) - 1
	for lo <= hi {
		mi := lo + (hi-lo)/2
		if nums[mi] == key {
			return mi
		} else if nums[mi] < key {
			lo = mi + 1
		} else {
			hi = mi - 1
		}
	}
	return -1
}

func main() {
	nums := []int{1, 2, 3, 4, 10, 25}
	key := 10
	result := BinarySearch(nums, key)
	fmt.Println(result)
}

func TestBinarySearch(t *testing.T) {
	tests := []struct {
		input    []int
		key      int
		expected int
	}{
		{[]int{1, 2, 3, 4, 10, 25}, 10, 4},
		{[]int{1, 2, 3, 4, 10, 25}, 1, 0},
		{[]int{1, 2, 3, 4, 10, 25}, 25, 5},
		{[]int{1, 2, 3, 4, 10, 25}, 5, -1},
	}

	for _, test := range tests {
		result := BinarySearch(test.input, test.key)
		if result != test.expected {
			t.Errorf("BinarySearch(%v, %d) = %d; expected %d", test.input, test.key, result, test.expected)
		}
	}
}
