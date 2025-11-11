// See https://aka.ms/new-console-template for more information
Console.WriteLine("Welk Getal?");
string n1 = Console.ReadLine();
int n2 = 0;
if (int.TryParse(n1, out n2))
{
    if (n2 % 2 == 0)
    {
        Console.WriteLine("Nummer is even");
    }
    else
    {
        Console.WriteLine("Nummer is oneven");
    }
}