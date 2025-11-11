// See https://aka.ms/new-console-template for more information
Console.WriteLine("Wat is het wachtwoord?");
string? wachtwoord = Console.ReadLine();

if (wachtwoord == "baas")
{
    Console.WriteLine("Volledige Toegang!");
}
else if (wachtwoord == "medewerker")
{
    Console.WriteLine("Gedeeltelijke Toegang!");
}
else
{
    Console.WriteLine("Geen Toegang!");
}
