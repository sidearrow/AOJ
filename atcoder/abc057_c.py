N = int(input())

ans = 100
for i in range(1, int(N ** 0.5) + 1):
    if N % i == 0:
        ans = min(max(len(str(i)), len(str(N // i))), ans)

print(ans)