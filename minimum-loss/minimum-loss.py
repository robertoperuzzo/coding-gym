#!/bin/python3

import math
import os
import random
import re
import sys

# Complete the minimumLoss function below.
def minimumLoss(price, n):
    sorted_items = sorted(zip(price, range(n)))
    zipped = zip(sorted_items[:n - 1],sorted_items[1:])
    return min(map(lambda x: x[1][0] - x[0][0], filter(lambda x: x[1][1] < x[0][1], zipped)))

if __name__ == '__main__':
    fptr = open(os.environ['OUTPUT_PATH'], 'w')

    n = int(input())

    price = list(map(int, input().rstrip().split()))

    result = minimumLoss(price, n)

    fptr.write(str(result) + '\n')

    fptr.close()
