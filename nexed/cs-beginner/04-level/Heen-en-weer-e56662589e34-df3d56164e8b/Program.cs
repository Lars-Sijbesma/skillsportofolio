Console.WriteLine("Tot welk getal?");
string? s = Console.ReadLine();
if (s is null)
{
    Environment.Exit(1);
}
int a = int.Parse(s);
for (int i = 1; a >= i; i++)
{
    Console.WriteLine(i);
}

for (int i = a - 1; i > 0; i--)
{
    Console.WriteLine(i);
}