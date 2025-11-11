// See https://aka.ms/new-console-template for more information
Console.WriteLine("Eerste getal?");
float n1 = 0;

if (!float.TryParse(Console.ReadLine(), out n1))
{
    Console.WriteLine("Dat is geen getal!");
    System.Environment.Exit(1);
}

Console.WriteLine("Tweede getal");

float n2 = 0;

if (!float.TryParse(Console.ReadLine(), out n2))
{
    Console.WriteLine("Dat is geen getal!");
    System.Environment.Exit(1);
}

if (n2 == 0)
{
    Console.WriteLine("Je mag niet delen door nul!");
    System.Environment.Exit(1);
}

Console.WriteLine("Resultaat:");
Console.WriteLine(n1 / n2);
