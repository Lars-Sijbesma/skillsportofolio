int[] getallenlijst = new int[] { 3, 7, 10, 40, 2, 4, 8 };

int max = 0;

foreach (int i in getallenlijst)
{
    if (i > max)
    {
        max = i;
    }
}

Console.WriteLine(max);